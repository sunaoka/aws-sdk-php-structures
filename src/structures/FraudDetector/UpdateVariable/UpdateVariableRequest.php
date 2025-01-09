<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateVariable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $defaultValue
 * @property string $description
 * @property string $variableType
 */
class UpdateVariableRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     defaultValue?: string,
     *     description?: string,
     *     variableType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
