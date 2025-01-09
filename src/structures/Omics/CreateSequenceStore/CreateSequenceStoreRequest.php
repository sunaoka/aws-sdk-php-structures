<?php

namespace Sunaoka\Aws\Structures\Omics\CreateSequenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property Shapes\SseConfig $sseConfig
 * @property array<string, string> $tags
 * @property string $clientToken
 * @property string $fallbackLocation
 * @property 'MD5up'|'SHA256up'|'SHA512up' $eTagAlgorithmFamily
 * @property list<string> $propagatedSetLevelTags
 * @property Shapes\S3AccessConfig $s3AccessConfig
 */
class CreateSequenceStoreRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     sseConfig?: Shapes\SseConfig,
     *     tags?: array<string, string>,
     *     clientToken?: string,
     *     fallbackLocation?: string,
     *     eTagAlgorithmFamily?: 'MD5up'|'SHA256up'|'SHA512up',
     *     propagatedSetLevelTags?: list<string>,
     *     s3AccessConfig?: Shapes\S3AccessConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
