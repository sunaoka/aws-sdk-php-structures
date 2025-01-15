<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ExportApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApiId
 * @property string|null $ExportVersion
 * @property bool|null $IncludeExtensions
 * @property string $OutputType
 * @property string $Specification
 * @property string|null $StageName
 */
class ExportApiRequest extends Request
{
    /**
     * @param array{
     *     ApiId: string,
     *     ExportVersion?: string|null,
     *     IncludeExtensions?: bool|null,
     *     OutputType: string,
     *     Specification: string,
     *     StageName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
