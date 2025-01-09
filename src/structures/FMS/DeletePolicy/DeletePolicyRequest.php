<?php

namespace Sunaoka\Aws\Structures\FMS\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property bool $DeleteAllPolicyResources
 */
class DeletePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     DeleteAllPolicyResources?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
