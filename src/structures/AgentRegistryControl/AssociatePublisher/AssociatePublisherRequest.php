<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\AssociatePublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recordArn
 * @property string $publisherArn
 * @property string|null $subdomain
 * @property list<string>|null $categories
 * @property string|null $clientToken
 */
class AssociatePublisherRequest extends Request
{
    /**
     * @param array{
     *     recordArn: string,
     *     publisherArn: string,
     *     subdomain?: string|null,
     *     categories?: list<string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
