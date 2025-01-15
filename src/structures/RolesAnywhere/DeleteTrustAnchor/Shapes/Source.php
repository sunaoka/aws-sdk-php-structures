<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SourceData|null $sourceData
 * @property 'AWS_ACM_PCA'|'CERTIFICATE_BUNDLE'|'SELF_SIGNED_REPOSITORY'|null $sourceType
 */
class Source extends Shape
{
    /**
     * @param array{
     *     sourceData?: SourceData|null,
     *     sourceType?: 'AWS_ACM_PCA'|'CERTIFICATE_BUNDLE'|'SELF_SIGNED_REPOSITORY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
