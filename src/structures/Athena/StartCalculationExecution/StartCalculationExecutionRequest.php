<?php

namespace Sunaoka\Aws\Structures\Athena\StartCalculationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property string $Description
 * @property Shapes\CalculationConfiguration $CalculationConfiguration
 * @property string $CodeBlock
 * @property string $ClientRequestToken
 */
class StartCalculationExecutionRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     Description?: string,
     *     CalculationConfiguration?: Shapes\CalculationConfiguration,
     *     CodeBlock?: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
