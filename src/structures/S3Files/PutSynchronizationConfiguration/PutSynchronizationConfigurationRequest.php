<?php

namespace Sunaoka\Aws\Structures\S3Files\PutSynchronizationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fileSystemId
 * @property int|null $latestVersionNumber
 * @property list<Shapes\ImportDataRule> $importDataRules
 * @property list<Shapes\ExpirationDataRule> $expirationDataRules
 */
class PutSynchronizationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     latestVersionNumber?: int|null,
     *     importDataRules: list<Shapes\ImportDataRule>,
     *     expirationDataRules: list<Shapes\ExpirationDataRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
