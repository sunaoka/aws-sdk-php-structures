<?php

namespace Sunaoka\Aws\Structures\LambdaCore;

class LambdaCoreClient extends \Aws\LambdaCore\LambdaCoreClient
{
    use CreateNetworkConnector\CreateNetworkConnectorTrait;
    use CreateRuntime\CreateRuntimeTrait;
    use CreateRuntimeAlias\CreateRuntimeAliasTrait;
    use CreateRuntimeVersion\CreateRuntimeVersionTrait;
    use DeleteNetworkConnector\DeleteNetworkConnectorTrait;
    use DeleteRuntime\DeleteRuntimeTrait;
    use DeleteRuntimeAlias\DeleteRuntimeAliasTrait;
    use DeleteRuntimeVersion\DeleteRuntimeVersionTrait;
    use GetNetworkConnector\GetNetworkConnectorTrait;
    use GetRuntime\GetRuntimeTrait;
    use GetRuntimeAlias\GetRuntimeAliasTrait;
    use GetRuntimeVersion\GetRuntimeVersionTrait;
    use ListNetworkConnectorVersions\ListNetworkConnectorVersionsTrait;
    use ListNetworkConnectors\ListNetworkConnectorsTrait;
    use ListRuntimeAliases\ListRuntimeAliasesTrait;
    use ListRuntimeVersions\ListRuntimeVersionsTrait;
    use ListRuntimes\ListRuntimesTrait;
    use RestoreRuntime\RestoreRuntimeTrait;
    use UpdateNetworkConnector\UpdateNetworkConnectorTrait;
    use UpdateRuntime\UpdateRuntimeTrait;
    use UpdateRuntimeAlias\UpdateRuntimeAliasTrait;
    use UpdateRuntimeVersion\UpdateRuntimeVersionTrait;
}
