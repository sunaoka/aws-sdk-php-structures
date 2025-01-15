<?php

namespace Sunaoka\Aws\Structures\Omics\CreateSequenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property Shapes\SseConfig|null $sseConfig
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 * @property string|null $fallbackLocation
 * @property 'MD5up'|'SHA256up'|'SHA512up'|null $eTagAlgorithmFamily
 * @property list<string>|null $propagatedSetLevelTags
 * @property Shapes\S3AccessConfig|null $s3AccessConfig
 */
class CreateSequenceStoreRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     sseConfig?: Shapes\SseConfig|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null,
     *     fallbackLocation?: string|null,
     *     eTagAlgorithmFamily?: 'MD5up'|'SHA256up'|'SHA512up'|null,
     *     propagatedSetLevelTags?: list<string>|null,
     *     s3AccessConfig?: Shapes\S3AccessConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
