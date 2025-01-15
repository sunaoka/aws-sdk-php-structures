<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property int<0, max>|null $schemaVersion
 * @property string|null $service
 * @property InspectorServiceAttributes|null $serviceAttributes
 * @property 'ec2-instance'|null $assetType
 * @property AssetAttributes|null $assetAttributes
 * @property string|null $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $recommendation
 * @property 'Low'|'Medium'|'High'|'Informational'|'Undefined'|null $severity
 * @property double|null $numericSeverity
 * @property int<0, 10>|null $confidence
 * @property bool|null $indicatorOfCompromise
 * @property list<Attribute> $attributes
 * @property list<Attribute> $userAttributes
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     schemaVersion?: int<0, max>|null,
     *     service?: string|null,
     *     serviceAttributes?: InspectorServiceAttributes|null,
     *     assetType?: 'ec2-instance'|null,
     *     assetAttributes?: AssetAttributes|null,
     *     id?: string|null,
     *     title?: string|null,
     *     description?: string|null,
     *     recommendation?: string|null,
     *     severity?: 'Low'|'Medium'|'High'|'Informational'|'Undefined'|null,
     *     numericSeverity?: double|null,
     *     confidence?: int<0, 10>|null,
     *     indicatorOfCompromise?: bool|null,
     *     attributes: list<Attribute>,
     *     userAttributes: list<Attribute>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
