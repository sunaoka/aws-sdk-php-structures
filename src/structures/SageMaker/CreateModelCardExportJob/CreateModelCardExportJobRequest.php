<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelCardExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ModelCardName
 * @property int $ModelCardVersion
 * @property string $ModelCardExportJobName
 * @property Shapes\ModelCardExportOutputConfig $OutputConfig
 */
class CreateModelCardExportJobRequest extends Request
{
    /**
     * @param array{
     *     ModelCardName: string,
     *     ModelCardVersion?: int,
     *     ModelCardExportJobName: string,
     *     OutputConfig: Shapes\ModelCardExportOutputConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
