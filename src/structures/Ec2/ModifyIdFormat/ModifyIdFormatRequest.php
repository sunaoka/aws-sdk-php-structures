<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIdFormat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property bool $UseLongIds
 */
class ModifyIdFormatRequest extends Request
{
    /**
     * @param array{
     *     Resource: string,
     *     UseLongIds: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
