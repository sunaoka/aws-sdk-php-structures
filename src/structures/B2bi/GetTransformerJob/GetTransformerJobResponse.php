<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformerJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'running'|'succeeded'|'failed' $status
 * @property list<Shapes\S3Location> $outputFiles
 * @property string $message
 */
class GetTransformerJobResponse extends Response
{
}
