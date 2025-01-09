<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\InferSNOMEDCT\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Edition
 * @property string $Language
 * @property string $VersionDate
 */
class SNOMEDCTDetails extends Shape
{
    /**
     * @param array{
     *     Edition?: string,
     *     Language?: string,
     *     VersionDate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
