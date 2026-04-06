<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCodeSecurityScanConfigurationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanConfigurationArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListCodeSecurityScanConfigurationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     scanConfigurationArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
