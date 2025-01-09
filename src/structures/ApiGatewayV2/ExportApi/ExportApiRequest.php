<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ExportApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string $ExportVersion
 * @property bool $IncludeExtensions
 * @property string $OutputType
 * @property string $Specification
 * @property string $StageName
 */
class ExportApiRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ExportVersion?: string,
     *     IncludeExtensions?: bool,
     *     OutputType: string,
     *     Specification: string,
     *     StageName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
