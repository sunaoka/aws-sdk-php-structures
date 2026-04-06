<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListJournalRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 * @property 'IAM'|'IDC'|'IDP' $userType
 */
class UserReference extends Shape
{
    /**
     * @param array{
     *     userId: string,
     *     userType: 'IAM'|'IDC'|'IDP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
