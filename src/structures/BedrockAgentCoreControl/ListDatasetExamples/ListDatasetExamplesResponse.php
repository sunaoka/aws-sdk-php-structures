<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetExamples;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetArn
 * @property string $datasetId
 * @property string $datasetVersion
 * @property list<Shapes\SensitiveJson> $examples
 * @property string|null $nextToken
 */
class ListDatasetExamplesResponse extends Response
{
}
