<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateForm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 * @property string $clientToken
 * @property Shapes\UpdateFormData $updatedForm
 */
class UpdateFormRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     id: string,
     *     clientToken?: string,
     *     updatedForm: Shapes\UpdateFormData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
