<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property Shapes\PreviewPrivacyImpactParametersInput $parameters
 */
class PreviewPrivacyImpactRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     parameters: Shapes\PreviewPrivacyImpactParametersInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
