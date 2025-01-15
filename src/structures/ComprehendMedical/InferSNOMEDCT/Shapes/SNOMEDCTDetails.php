<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Edition
 * @property string|null $Language
 * @property string|null $VersionDate
 */
class SNOMEDCTDetails extends Shape
{
    /**
     * @param array{
     *     Edition?: string|null,
     *     Language?: string|null,
     *     VersionDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
