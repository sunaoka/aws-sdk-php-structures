<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ValidatePipelineDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ValidationError>|null $validationErrors
 * @property list<Shapes\ValidationWarning>|null $validationWarnings
 * @property bool $errored
 */
class ValidatePipelineDefinitionResponse extends Response
{
}
