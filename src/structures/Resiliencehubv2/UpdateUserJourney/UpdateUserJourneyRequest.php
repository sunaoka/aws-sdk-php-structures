<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateUserJourney;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemArn
 * @property string $userJourneyId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $policyArn
 */
class UpdateUserJourneyRequest extends Request
{
    /**
     * @param array{
     *     systemArn: string,
     *     userJourneyId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     policyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
