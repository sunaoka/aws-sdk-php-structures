<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocumentPermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $SharedDocumentVersion
 */
class AccountSharingInfo extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     SharedDocumentVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
