<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateUserJourney;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemArn
 * @property string $name
 * @property string|null $description
 * @property string|null $policyArn
 * @property string|null $clientToken
 */
class CreateUserJourneyRequest extends Request
{
    /**
     * @param array{
     *     systemArn: string,
     *     name: string,
     *     description?: string|null,
     *     policyArn?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
