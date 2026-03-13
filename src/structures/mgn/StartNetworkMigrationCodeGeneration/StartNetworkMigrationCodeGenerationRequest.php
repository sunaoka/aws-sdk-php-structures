<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationCodeGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkMigrationExecutionID
 * @property string $networkMigrationDefinitionID
 * @property list<'CDK_L1'|'CDK_L2'|'TERRAFORM'|'LZA'>|null $codeGenerationOutputFormatTypes
 */
class StartNetworkMigrationCodeGenerationRequest extends Request
{
    /**
     * @param array{
     *     networkMigrationExecutionID: string,
     *     networkMigrationDefinitionID: string,
     *     codeGenerationOutputFormatTypes?: list<'CDK_L1'|'CDK_L2'|'TERRAFORM'|'LZA'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
