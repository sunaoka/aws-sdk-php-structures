<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowDeferredExecution
 * @property string|null $DataAccessRoleArn
 */
class JobExecutionSettings extends Shape
{
    /**
     * @param array{
     *     AllowDeferredExecution?: bool|null,
     *     DataAccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
