<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateDomainMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $DomainName
 * @property string|null $DisplayName
 */
class UpdateDomainMetadataRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     DomainName: string,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
