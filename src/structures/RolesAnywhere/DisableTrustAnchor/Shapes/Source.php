<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DisableTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_ACM_PCA'|'CERTIFICATE_BUNDLE'|'SELF_SIGNED_REPOSITORY'|null $sourceType
 * @property SourceData|null $sourceData
 */
class Source extends Shape
{
    /**
     * @param array{
     *     sourceType?: 'AWS_ACM_PCA'|'CERTIFICATE_BUNDLE'|'SELF_SIGNED_REPOSITORY'|null,
     *     sourceData?: SourceData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
