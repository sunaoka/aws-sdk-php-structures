<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\StartCodegenJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $clientToken
 * @property Shapes\StartCodegenJobData $codegenJobToCreate
 */
class StartCodegenJobRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     clientToken?: string,
     *     codegenJobToCreate: Shapes\StartCodegenJobData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
