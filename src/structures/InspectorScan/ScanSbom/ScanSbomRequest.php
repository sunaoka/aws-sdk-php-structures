<?php

namespace Sunaoka\Aws\Structures\InspectorScan\ScanSbom;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Sbom $sbom
 * @property 'CYCLONE_DX_1_5'|'INSPECTOR'|'INSPECTOR_ALT'|null $outputFormat
 */
class ScanSbomRequest extends Request
{
    /**
     * @param array{
     *     sbom: Shapes\Sbom,
     *     outputFormat?: 'CYCLONE_DX_1_5'|'INSPECTOR'|'INSPECTOR_ALT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
