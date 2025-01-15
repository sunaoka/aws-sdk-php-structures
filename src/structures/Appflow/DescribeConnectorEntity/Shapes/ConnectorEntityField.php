<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string|null $parentIdentifier
 * @property string|null $label
 * @property bool|null $isPrimaryKey
 * @property string|null $defaultValue
 * @property bool|null $isDeprecated
 * @property SupportedFieldTypeDetails|null $supportedFieldTypeDetails
 * @property string|null $description
 * @property SourceFieldProperties|null $sourceProperties
 * @property DestinationFieldProperties|null $destinationProperties
 * @property array<string, string>|null $customProperties
 */
class ConnectorEntityField extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     parentIdentifier?: string|null,
     *     label?: string|null,
     *     isPrimaryKey?: bool|null,
     *     defaultValue?: string|null,
     *     isDeprecated?: bool|null,
     *     supportedFieldTypeDetails?: SupportedFieldTypeDetails|null,
     *     description?: string|null,
     *     sourceProperties?: SourceFieldProperties|null,
     *     destinationProperties?: DestinationFieldProperties|null,
     *     customProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
