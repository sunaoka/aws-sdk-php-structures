<?php

namespace Sunaoka\Aws\Structures\Detective\UpdateInvestigationState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $InvestigationId
 * @property 'ACTIVE'|'ARCHIVED' $State
 */
class UpdateInvestigationStateRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     InvestigationId: string,
     *     State: 'ACTIVE'|'ARCHIVED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
