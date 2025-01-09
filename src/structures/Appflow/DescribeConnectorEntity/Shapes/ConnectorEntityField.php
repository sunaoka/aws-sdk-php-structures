<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $parentIdentifier
 * @property string $label
 * @property bool $isPrimaryKey
 * @property string $defaultValue
 * @property bool $isDeprecated
 * @property SupportedFieldTypeDetails $supportedFieldTypeDetails
 * @property string $description
 * @property SourceFieldProperties $sourceProperties
 * @property DestinationFieldProperties $destinationProperties
 * @property array<string, string> $customProperties
 */
class ConnectorEntityField extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     parentIdentifier?: string,
     *     label?: string,
     *     isPrimaryKey?: bool,
     *     defaultValue?: string,
     *     isDeprecated?: bool,
     *     supportedFieldTypeDetails?: SupportedFieldTypeDetails,
     *     description?: string,
     *     sourceProperties?: SourceFieldProperties,
     *     destinationProperties?: DestinationFieldProperties,
     *     customProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
