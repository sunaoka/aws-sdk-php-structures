<?php

namespace Sunaoka\Aws\Structures\Sfn\ValidateStateMachineDefinition;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'OK'|'FAIL' $result
 * @property list<Shapes\ValidateStateMachineDefinitionDiagnostic> $diagnostics
 * @property bool|null $truncated
 */
class ValidateStateMachineDefinitionResponse extends Response
{
}
