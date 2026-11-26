<?php

namespace Sunaoka\Aws\Structures\ELBProxy\GetProxyConfigurationContents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 * @property bool|null $includeConfigFile
 * @property bool|null $includeConfigArchive
 */
class GetProxyConfigurationContentsRequest extends Request
{
    /**
     * @param array{
     *     proxyIdentifier: string,
     *     includeConfigFile?: bool|null,
     *     includeConfigArchive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
