<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContactVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $contactId
 * @property int<1, 128> $versionId
 */
class DescribeContactVersionRequest extends Request
{
    /**
     * @param array{
     *     contactId: string,
     *     versionId: int<1, 128>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
