<?php

namespace Sunaoka\Aws\Structures\Textract\CreateAdapterVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdapterId
 * @property string $ClientRequestToken
 * @property Shapes\AdapterVersionDatasetConfig $DatasetConfig
 * @property string $KMSKeyId
 * @property Shapes\OutputConfig $OutputConfig
 * @property array<string, string> $Tags
 */
class CreateAdapterVersionRequest extends Request
{
    /**
     * @param array{
     *     AdapterId: string,
     *     ClientRequestToken?: string,
     *     DatasetConfig: Shapes\AdapterVersionDatasetConfig,
     *     KMSKeyId?: string,
     *     OutputConfig: Shapes\OutputConfig,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
