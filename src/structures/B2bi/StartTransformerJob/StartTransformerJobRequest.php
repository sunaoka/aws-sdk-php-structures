<?php

namespace Sunaoka\Aws\Structures\B2bi\StartTransformerJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\S3Location $inputFile
 * @property Shapes\S3Location $outputLocation
 * @property string $transformerId
 * @property string $clientToken
 */
class StartTransformerJobRequest extends Request
{
    /**
     * @param array{
     *     inputFile: Shapes\S3Location,
     *     outputLocation: Shapes\S3Location,
     *     transformerId: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
