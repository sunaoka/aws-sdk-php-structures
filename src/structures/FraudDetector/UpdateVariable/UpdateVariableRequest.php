<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateVariable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $defaultValue
 * @property string|null $description
 * @property string|null $variableType
 */
class UpdateVariableRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     defaultValue?: string|null,
     *     description?: string|null,
     *     variableType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
