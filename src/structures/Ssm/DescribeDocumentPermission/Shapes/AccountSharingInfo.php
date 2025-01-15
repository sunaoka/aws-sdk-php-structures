<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocumentPermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $SharedDocumentVersion
 */
class AccountSharingInfo extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     SharedDocumentVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
