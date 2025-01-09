<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeAllManagedProducts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VendorName
 * @property string $ManagedRuleSetName
 * @property string $ProductId
 * @property string $ProductLink
 * @property string $ProductTitle
 * @property string $ProductDescription
 * @property string $SnsTopicArn
 * @property bool $IsVersioningSupported
 * @property bool $IsAdvancedManagedRuleSet
 */
class ManagedProductDescriptor extends Shape
{
    /**
     * @param array{
     *     VendorName?: string,
     *     ManagedRuleSetName?: string,
     *     ProductId?: string,
     *     ProductLink?: string,
     *     ProductTitle?: string,
     *     ProductDescription?: string,
     *     SnsTopicArn?: string,
     *     IsVersioningSupported?: bool,
     *     IsAdvancedManagedRuleSet?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
