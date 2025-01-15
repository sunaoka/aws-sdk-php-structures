<?php

namespace Sunaoka\Aws\Structures\Athena\StartCalculationExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property string|null $Description
 * @property Shapes\CalculationConfiguration|null $CalculationConfiguration
 * @property string|null $CodeBlock
 * @property string|null $ClientRequestToken
 */
class StartCalculationExecutionRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     Description?: string|null,
     *     CalculationConfiguration?: Shapes\CalculationConfiguration|null,
     *     CodeBlock?: string|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
