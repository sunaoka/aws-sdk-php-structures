<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataQualityProfileAnnotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property 'INCLUDE'|'EXCLUDE' $InclusionAnnotation
 */
class PutDataQualityProfileAnnotationRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     InclusionAnnotation: 'INCLUDE'|'EXCLUDE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
