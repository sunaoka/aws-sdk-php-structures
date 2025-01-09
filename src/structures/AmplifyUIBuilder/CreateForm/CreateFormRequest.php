<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $clientToken
 * @property Shapes\CreateFormData $formToCreate
 */
class CreateFormRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     clientToken?: string,
     *     formToCreate: Shapes\CreateFormData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
