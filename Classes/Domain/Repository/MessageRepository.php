<?php declare(strict_types=1);

namespace Sms77\Sms77Typo3\Domain\Repository;

use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;

class MessageRepository extends AbstractRepository {
    public function __construct(ObjectManagerInterface $objectManager) {
        parent::__construct($objectManager, 'message');
    }
}