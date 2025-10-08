<?php

namespace Sunaoka\Aws\Structures\Tnb;

class TnbClient extends \Aws\Tnb\TnbClient
{
    use CancelSolNetworkOperation\CancelSolNetworkOperationTrait;
    use CreateSolFunctionPackage\CreateSolFunctionPackageTrait;
    use CreateSolNetworkInstance\CreateSolNetworkInstanceTrait;
    use CreateSolNetworkPackage\CreateSolNetworkPackageTrait;
    use DeleteSolFunctionPackage\DeleteSolFunctionPackageTrait;
    use DeleteSolNetworkInstance\DeleteSolNetworkInstanceTrait;
    use DeleteSolNetworkPackage\DeleteSolNetworkPackageTrait;
    use GetSolFunctionInstance\GetSolFunctionInstanceTrait;
    use GetSolFunctionPackage\GetSolFunctionPackageTrait;
    use GetSolFunctionPackageContent\GetSolFunctionPackageContentTrait;
    use GetSolFunctionPackageDescriptor\GetSolFunctionPackageDescriptorTrait;
    use GetSolNetworkInstance\GetSolNetworkInstanceTrait;
    use GetSolNetworkOperation\GetSolNetworkOperationTrait;
    use GetSolNetworkPackage\GetSolNetworkPackageTrait;
    use GetSolNetworkPackageContent\GetSolNetworkPackageContentTrait;
    use GetSolNetworkPackageDescriptor\GetSolNetworkPackageDescriptorTrait;
    use InstantiateSolNetworkInstance\InstantiateSolNetworkInstanceTrait;
    use ListSolFunctionInstances\ListSolFunctionInstancesTrait;
    use ListSolFunctionPackages\ListSolFunctionPackagesTrait;
    use ListSolNetworkInstances\ListSolNetworkInstancesTrait;
    use ListSolNetworkOperations\ListSolNetworkOperationsTrait;
    use ListSolNetworkPackages\ListSolNetworkPackagesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutSolFunctionPackageContent\PutSolFunctionPackageContentTrait;
    use PutSolNetworkPackageContent\PutSolNetworkPackageContentTrait;
    use TagResource\TagResourceTrait;
    use TerminateSolNetworkInstance\TerminateSolNetworkInstanceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateSolFunctionPackage\UpdateSolFunctionPackageTrait;
    use UpdateSolNetworkInstance\UpdateSolNetworkInstanceTrait;
    use UpdateSolNetworkPackage\UpdateSolNetworkPackageTrait;
    use ValidateSolFunctionPackageContent\ValidateSolFunctionPackageContentTrait;
    use ValidateSolNetworkPackageContent\ValidateSolNetworkPackageContentTrait;
}
