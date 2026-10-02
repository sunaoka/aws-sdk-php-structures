<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExposuresByRemediationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetadataUid
 * @property string $Title
 * @property 'Informational'|'Low'|'Medium'|'High'|'Critical' $PreviousSeverity
 * @property 'Informational'|'Low'|'Medium'|'High'|'Critical' $ProjectedSeverity
 * @property 'Reduces'|'Resolves'|'Unchanged' $Impact
 */
class ExposureFinding extends Shape
{
    /**
     * @param array{
     *     MetadataUid: string,
     *     Title: string,
     *     PreviousSeverity: 'Informational'|'Low'|'Medium'|'High'|'Critical',
     *     ProjectedSeverity: 'Informational'|'Low'|'Medium'|'High'|'Critical',
     *     Impact: 'Reduces'|'Resolves'|'Unchanged'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
