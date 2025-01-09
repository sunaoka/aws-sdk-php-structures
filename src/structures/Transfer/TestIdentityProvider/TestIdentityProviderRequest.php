<?php

namespace Sunaoka\Aws\Structures\Transfer\TestIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerId
 * @property 'SFTP'|'FTP'|'FTPS'|'AS2' $ServerProtocol
 * @property string $SourceIp
 * @property string $UserName
 * @property string $UserPassword
 */
class TestIdentityProviderRequest extends Request
{
    /**
     * @param array{
     *     ServerId: string,
     *     ServerProtocol?: 'SFTP'|'FTP'|'FTPS'|'AS2',
     *     SourceIp?: string,
     *     UserName: string,
     *     UserPassword?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
