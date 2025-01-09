<?php

namespace Sunaoka\Aws\Structures\CloudHsm\GetConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientArn
 * @property '5.1'|'5.3' $ClientVersion
 * @property list<string> $HapgList
 */
class GetConfigRequest extends Request
{
    /**
     * @param array{
     *     ClientArn: string,
     *     ClientVersion: '5.1'|'5.3',
     *     HapgList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
