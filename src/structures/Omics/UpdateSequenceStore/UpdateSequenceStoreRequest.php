<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateSequenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $clientToken
 * @property string|null $fallbackLocation
 * @property list<string>|null $propagatedSetLevelTags
 * @property Shapes\S3AccessConfig|null $s3AccessConfig
 */
class UpdateSequenceStoreRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string|null,
     *     description?: string|null,
     *     clientToken?: string|null,
     *     fallbackLocation?: string|null,
     *     propagatedSetLevelTags?: list<string>|null,
     *     s3AccessConfig?: Shapes\S3AccessConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
