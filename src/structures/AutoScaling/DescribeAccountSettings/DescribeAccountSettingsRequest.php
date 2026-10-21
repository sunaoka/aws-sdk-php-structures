<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribeAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
