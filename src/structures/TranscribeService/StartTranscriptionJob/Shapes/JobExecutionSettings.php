<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartTranscriptionJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowDeferredExecution
 * @property string $DataAccessRoleArn
 */
class JobExecutionSettings extends Shape
{
    /**
     * @param array{
     *     AllowDeferredExecution?: bool,
     *     DataAccessRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
