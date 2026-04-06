<?php

namespace Sunaoka\Aws\Structures\Textract\CreateAdapterVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterId
 * @property string|null $ClientRequestToken
 * @property Shapes\AdapterVersionDatasetConfig $DatasetConfig
 * @property string|null $KMSKeyId
 * @property Shapes\OutputConfig $OutputConfig
 * @property array<string, string>|null $Tags
 */
class CreateAdapterVersionRequest extends Request
{
    /**
     * @param array{
     *     AdapterId: string,
     *     ClientRequestToken?: string|null,
     *     DatasetConfig: Shapes\AdapterVersionDatasetConfig,
     *     KMSKeyId?: string|null,
     *     OutputConfig: Shapes\OutputConfig,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
