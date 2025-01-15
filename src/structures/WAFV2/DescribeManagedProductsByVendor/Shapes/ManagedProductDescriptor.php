<?php

namespace Sunaoka\Aws\Structures\WAFV2\DescribeManagedProductsByVendor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VendorName
 * @property string|null $ManagedRuleSetName
 * @property string|null $ProductId
 * @property string|null $ProductLink
 * @property string|null $ProductTitle
 * @property string|null $ProductDescription
 * @property string|null $SnsTopicArn
 * @property bool|null $IsVersioningSupported
 * @property bool|null $IsAdvancedManagedRuleSet
 */
class ManagedProductDescriptor extends Shape
{
    /**
     * @param array{
     *     VendorName?: string|null,
     *     ManagedRuleSetName?: string|null,
     *     ProductId?: string|null,
     *     ProductLink?: string|null,
     *     ProductTitle?: string|null,
     *     ProductDescription?: string|null,
     *     SnsTopicArn?: string|null,
     *     IsVersioningSupported?: bool|null,
     *     IsAdvancedManagedRuleSet?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
