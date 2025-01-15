<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformerJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'running'|'succeeded'|'failed' $status
 * @property list<Shapes\S3Location>|null $outputFiles
 * @property string|null $message
 */
class GetTransformerJobResponse extends Response
{
}
