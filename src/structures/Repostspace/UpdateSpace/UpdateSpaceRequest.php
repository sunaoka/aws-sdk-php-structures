<?php

namespace Sunaoka\Aws\Structures\Repostspace\UpdateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string|null $description
 * @property 'BASIC'|'STANDARD'|null $tier
 * @property string|null $roleArn
 * @property Shapes\SupportedEmailDomainsParameters|null $supportedEmailDomains
 */
class UpdateSpaceRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     description?: string|null,
     *     tier?: 'BASIC'|'STANDARD'|null,
     *     roleArn?: string|null,
     *     supportedEmailDomains?: Shapes\SupportedEmailDomainsParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
