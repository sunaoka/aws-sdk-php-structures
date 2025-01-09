<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceData $sourceData
 * @property 'AWS_ACM_PCA'|'CERTIFICATE_BUNDLE'|'SELF_SIGNED_REPOSITORY' $sourceType
 */
class Source extends Shape
{
    /**
     * @param array{
     *     sourceData?: SourceData,
     *     sourceType?: 'AWS_ACM_PCA'|'CERTIFICATE_BUNDLE'|'SELF_SIGNED_REPOSITORY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
