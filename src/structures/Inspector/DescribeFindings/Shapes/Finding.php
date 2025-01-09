<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property int $schemaVersion
 * @property string $service
 * @property InspectorServiceAttributes $serviceAttributes
 * @property 'ec2-instance' $assetType
 * @property AssetAttributes $assetAttributes
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $recommendation
 * @property 'Low'|'Medium'|'High'|'Informational'|'Undefined' $severity
 * @property double $numericSeverity
 * @property int $confidence
 * @property bool $indicatorOfCompromise
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
     *     schemaVersion?: int,
     *     service?: string,
     *     serviceAttributes?: InspectorServiceAttributes,
     *     assetType?: 'ec2-instance',
     *     assetAttributes?: AssetAttributes,
     *     id?: string,
     *     title?: string,
     *     description?: string,
     *     recommendation?: string,
     *     severity?: 'Low'|'Medium'|'High'|'Informational'|'Undefined',
     *     numericSeverity?: double,
     *     confidence?: int,
     *     indicatorOfCompromise?: bool,
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
