<?php

namespace Sunaoka\Aws\Structures\Detective\GetInvestigation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $InvestigationId
 */
class GetInvestigationRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     InvestigationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
