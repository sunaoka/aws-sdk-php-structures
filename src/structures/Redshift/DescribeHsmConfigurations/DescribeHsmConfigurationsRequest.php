<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeHsmConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmConfigurationIdentifier
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<string> $TagKeys
 * @property list<string> $TagValues
 */
class DescribeHsmConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     HsmConfigurationIdentifier?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     TagKeys?: list<string>,
     *     TagValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
